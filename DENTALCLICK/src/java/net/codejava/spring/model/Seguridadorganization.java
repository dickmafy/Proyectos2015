/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.util.Date;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

/**
 *
 * @author DIEGO
 */
@Entity
@NamedQueries({
    @NamedQuery(name = "Seguridadorganization.findAll", query = "SELECT s FROM Seguridadorganization s")})
public class Seguridadorganization implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    private Long organizationid;
    private String comments;
    private Integer companyid;
    private Integer countryid;
    @Temporal(TemporalType.TIMESTAMP)
    private Date createdate;
    @Temporal(TemporalType.TIMESTAMP)
    private Date modifieddate;
    private String name;
    private Integer parentorganizationid;
    private Boolean recursable;
    private Integer regionid;
    private Integer statusid;
    private String treepath;
    @Column(name = "type_")
    private String type;
    private Integer userid;
    private String username;
    @Column(name = "uuid_")
    private String uuid;

    public Seguridadorganization() {
    }

    public Seguridadorganization(Long organizationid) {
        this.organizationid = organizationid;
    }

    public Long getOrganizationid() {
        return organizationid;
    }

    public void setOrganizationid(Long organizationid) {
        this.organizationid = organizationid;
    }

    public String getComments() {
        return comments;
    }

    public void setComments(String comments) {
        this.comments = comments;
    }

    public Integer getCompanyid() {
        return companyid;
    }

    public void setCompanyid(Integer companyid) {
        this.companyid = companyid;
    }

    public Integer getCountryid() {
        return countryid;
    }

    public void setCountryid(Integer countryid) {
        this.countryid = countryid;
    }

    public Date getCreatedate() {
        return createdate;
    }

    public void setCreatedate(Date createdate) {
        this.createdate = createdate;
    }

    public Date getModifieddate() {
        return modifieddate;
    }

    public void setModifieddate(Date modifieddate) {
        this.modifieddate = modifieddate;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public Integer getParentorganizationid() {
        return parentorganizationid;
    }

    public void setParentorganizationid(Integer parentorganizationid) {
        this.parentorganizationid = parentorganizationid;
    }

    public Boolean getRecursable() {
        return recursable;
    }

    public void setRecursable(Boolean recursable) {
        this.recursable = recursable;
    }

    public Integer getRegionid() {
        return regionid;
    }

    public void setRegionid(Integer regionid) {
        this.regionid = regionid;
    }

    public Integer getStatusid() {
        return statusid;
    }

    public void setStatusid(Integer statusid) {
        this.statusid = statusid;
    }

    public String getTreepath() {
        return treepath;
    }

    public void setTreepath(String treepath) {
        this.treepath = treepath;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public Integer getUserid() {
        return userid;
    }

    public void setUserid(Integer userid) {
        this.userid = userid;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getUuid() {
        return uuid;
    }

    public void setUuid(String uuid) {
        this.uuid = uuid;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (organizationid != null ? organizationid.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadorganization)) {
            return false;
        }
        Seguridadorganization other = (Seguridadorganization) object;
        if ((this.organizationid == null && other.organizationid != null) || (this.organizationid != null && !this.organizationid.equals(other.organizationid))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadorganization[ organizationid=" + organizationid + " ]";
    }
    
}
