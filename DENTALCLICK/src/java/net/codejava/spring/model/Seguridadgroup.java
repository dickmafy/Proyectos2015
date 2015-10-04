/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.math.BigDecimal;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;

/**
 *
 * @author DIEGO
 */
@Entity
@NamedQueries({
    @NamedQuery(name = "Seguridadgroup.findAll", query = "SELECT s FROM Seguridadgroup s")})
public class Seguridadgroup implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    private Long groupid;
    @Column(name = "active_")
    private Boolean active;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    private BigDecimal classnameid;
    private BigDecimal classpk;
    private BigDecimal companyid;
    private BigDecimal creatoruserid;
    private String description;
    private String friendlyurl;
    private BigDecimal livegroupid;
    private Boolean manualmembership;
    private Integer membershiprestriction;
    private String name;
    private BigDecimal parentgroupid;
    private Integer remotestaginggroupcount;
    private Boolean site;
    private String treepath;
    @Column(name = "type_")
    private Integer type;
    private String typesettings;
    @Column(name = "uuid_")
    private String uuid;

    public Seguridadgroup() {
    }

    public Seguridadgroup(Long groupid) {
        this.groupid = groupid;
    }

    public Long getGroupid() {
        return groupid;
    }

    public void setGroupid(Long groupid) {
        this.groupid = groupid;
    }

    public Boolean getActive() {
        return active;
    }

    public void setActive(Boolean active) {
        this.active = active;
    }

    public BigDecimal getClassnameid() {
        return classnameid;
    }

    public void setClassnameid(BigDecimal classnameid) {
        this.classnameid = classnameid;
    }

    public BigDecimal getClasspk() {
        return classpk;
    }

    public void setClasspk(BigDecimal classpk) {
        this.classpk = classpk;
    }

    public BigDecimal getCompanyid() {
        return companyid;
    }

    public void setCompanyid(BigDecimal companyid) {
        this.companyid = companyid;
    }

    public BigDecimal getCreatoruserid() {
        return creatoruserid;
    }

    public void setCreatoruserid(BigDecimal creatoruserid) {
        this.creatoruserid = creatoruserid;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getFriendlyurl() {
        return friendlyurl;
    }

    public void setFriendlyurl(String friendlyurl) {
        this.friendlyurl = friendlyurl;
    }

    public BigDecimal getLivegroupid() {
        return livegroupid;
    }

    public void setLivegroupid(BigDecimal livegroupid) {
        this.livegroupid = livegroupid;
    }

    public Boolean getManualmembership() {
        return manualmembership;
    }

    public void setManualmembership(Boolean manualmembership) {
        this.manualmembership = manualmembership;
    }

    public Integer getMembershiprestriction() {
        return membershiprestriction;
    }

    public void setMembershiprestriction(Integer membershiprestriction) {
        this.membershiprestriction = membershiprestriction;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public BigDecimal getParentgroupid() {
        return parentgroupid;
    }

    public void setParentgroupid(BigDecimal parentgroupid) {
        this.parentgroupid = parentgroupid;
    }

    public Integer getRemotestaginggroupcount() {
        return remotestaginggroupcount;
    }

    public void setRemotestaginggroupcount(Integer remotestaginggroupcount) {
        this.remotestaginggroupcount = remotestaginggroupcount;
    }

    public Boolean getSite() {
        return site;
    }

    public void setSite(Boolean site) {
        this.site = site;
    }

    public String getTreepath() {
        return treepath;
    }

    public void setTreepath(String treepath) {
        this.treepath = treepath;
    }

    public Integer getType() {
        return type;
    }

    public void setType(Integer type) {
        this.type = type;
    }

    public String getTypesettings() {
        return typesettings;
    }

    public void setTypesettings(String typesettings) {
        this.typesettings = typesettings;
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
        hash += (groupid != null ? groupid.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadgroup)) {
            return false;
        }
        Seguridadgroup other = (Seguridadgroup) object;
        if ((this.groupid == null && other.groupid != null) || (this.groupid != null && !this.groupid.equals(other.groupid))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadgroup[ groupid=" + groupid + " ]";
    }
    
}
