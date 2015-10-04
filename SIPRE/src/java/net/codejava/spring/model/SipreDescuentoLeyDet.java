/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.util.List;
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_DESCUENTO_LEY_DET")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreDescuentoLeyDet.findAll", query = "SELECT s FROM SipreDescuentoLeyDet s")})
public class SipreDescuentoLeyDet implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreDescuentoLeyDetPK sipreDescuentoLeyDetPK;
    @Column(name = "VDLD_DSC")
    private String vdldDsc;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreDescuentoLeyDet")
    private List<SipreConceptoDescuentoLey> sipreConceptoDescuentoLeyList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreDescuentoLeyDet")
    private List<SipreDescuentoLeyPersona> sipreDescuentoLeyPersonaList;
    @JoinColumn(name = "CDL_CODIGO", referencedColumnName = "CDL_CODIGO", insertable = false, updatable = false)
    @ManyToOne(optional = false)
    private SipreDescuentoLey sipreDescuentoLey;

    public SipreDescuentoLeyDet() {
    }

    public SipreDescuentoLeyDet(SipreDescuentoLeyDetPK sipreDescuentoLeyDetPK) {
        this.sipreDescuentoLeyDetPK = sipreDescuentoLeyDetPK;
    }

    public SipreDescuentoLeyDet(String cdlCodigo, String cdldCodigo) {
        this.sipreDescuentoLeyDetPK = new SipreDescuentoLeyDetPK(cdlCodigo, cdldCodigo);
    }

    public SipreDescuentoLeyDetPK getSipreDescuentoLeyDetPK() {
        return sipreDescuentoLeyDetPK;
    }

    public void setSipreDescuentoLeyDetPK(SipreDescuentoLeyDetPK sipreDescuentoLeyDetPK) {
        this.sipreDescuentoLeyDetPK = sipreDescuentoLeyDetPK;
    }

    public String getVdldDsc() {
        return vdldDsc;
    }

    public void setVdldDsc(String vdldDsc) {
        this.vdldDsc = vdldDsc;
    }

    @XmlTransient
    public List<SipreConceptoDescuentoLey> getSipreConceptoDescuentoLeyList() {
        return sipreConceptoDescuentoLeyList;
    }

    public void setSipreConceptoDescuentoLeyList(List<SipreConceptoDescuentoLey> sipreConceptoDescuentoLeyList) {
        this.sipreConceptoDescuentoLeyList = sipreConceptoDescuentoLeyList;
    }

    @XmlTransient
    public List<SipreDescuentoLeyPersona> getSipreDescuentoLeyPersonaList() {
        return sipreDescuentoLeyPersonaList;
    }

    public void setSipreDescuentoLeyPersonaList(List<SipreDescuentoLeyPersona> sipreDescuentoLeyPersonaList) {
        this.sipreDescuentoLeyPersonaList = sipreDescuentoLeyPersonaList;
    }

    public SipreDescuentoLey getSipreDescuentoLey() {
        return sipreDescuentoLey;
    }

    public void setSipreDescuentoLey(SipreDescuentoLey sipreDescuentoLey) {
        this.sipreDescuentoLey = sipreDescuentoLey;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (sipreDescuentoLeyDetPK != null ? sipreDescuentoLeyDetPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreDescuentoLeyDet)) {
            return false;
        }
        SipreDescuentoLeyDet other = (SipreDescuentoLeyDet) object;
        if ((this.sipreDescuentoLeyDetPK == null && other.sipreDescuentoLeyDetPK != null) || (this.sipreDescuentoLeyDetPK != null && !this.sipreDescuentoLeyDetPK.equals(other.sipreDescuentoLeyDetPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreDescuentoLeyDet[ sipreDescuentoLeyDetPK=" + sipreDescuentoLeyDetPK + " ]";
    }
    
}
